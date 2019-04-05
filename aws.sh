#!/bin/bash
dir='nmsprime'

# s3 bucket
bucket=$(grep '^bucket[[:space:]]*=' ~/.aws/backup.cfg | cut -d'=' -f2 | xargs)
if [ -z "$bucket" ]; then
	echo 'no aws bucket found, terminating' >&2
	exit 1
fi

# gpg key
key_id=$(grep '^key_id[[:space:]]*=' ~/.aws/backup.cfg | cut -d'=' -f2 | xargs)
if [ -z "$key_id" ]; then
	# use default key if none was set
	key_id='0x8FDA2EA42E98F903'
fi

# if necessary import gpg backup key
gpg --list-keys "$key_id" > /dev/null 2>&1 || gpg --recv-keys "$key_id"
gpg --list-keys "$key_id" > /dev/null 2>&1 || exit 1

# check if awscli is available
which aws > /dev/null || exit 1

# run backup script, encrypt and push into the s3 bucket
/var/www/nmsprime/backup.sh | gpg --encrypt --recipient "$key_id" --trust-model always | aws s3 cp - $(date "+s3://$bucket/$dir/%Y%m%dT%H%M%S.tar.gz.gpg")

# delete backup of 2 days ago except for wednesdays, thus keeping the monday backups
# deleting older monday versions should be done using an aws s3 lifecycle rule
if [ $(date +%u) -ne 3 ]; then
	aws s3 rm "s3://$bucket/$dir" --recursive --exclude "*" --include $(date -d '2 days ago' +%Y%m%dT*)
fi
