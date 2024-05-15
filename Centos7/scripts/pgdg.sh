sudo yum install https://download.postgresql.org/pub/repos/yum/reporpms/EL-7-x86_64/pgdg-redhat-repo-latest.noarch.rpm
sudo yum-config-manager --disable pgdg96
sudo yum install postgresql11 postgresql1-server
sudo /usr/pgsql-11/bin/postgresql-11-setup initdb
sudo systemctl enable postgresql-11
sudo systemctl start postgresql-11
