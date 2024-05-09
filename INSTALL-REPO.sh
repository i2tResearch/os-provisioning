#!/bin/bash

# add epel
yum install -y epel-release

# add NMS Prime repos
yum install -y /repos/yum.repos.d/grafana.repo
yum install -y /repos/yum.repos.d/ICINGA-release.repo
yum install -y /repos/yum.repos.d/mongodb-org-44.repo
yum install -y /repos/yum.repos.d/nmsprime-os.repo
yum install -y /repos/yum.repos.d/nmsprime-prime.repo
yum install -y /repos/yum.repos.d/pgdg-redhat-all.repo --disablerepo=pgdg-common
yum install -y /repos/yum.repos.d/remi-safe.repo
yum install -y /repos/yum.repos.d/timescale_timescaledb.repo
# enable software collections, needed for rh-nodejs12
yum install -y centos-release-scl

# clean & update
yum clean all && yum update -y
