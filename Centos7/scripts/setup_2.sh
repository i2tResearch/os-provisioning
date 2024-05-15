#!/bin/bash

curl -vsL https://raw.githubusercontent.com/i2tResearch/os-provisioning/dev/INSTALL-REPO.sh | bash
yum install -y nmsprime-*
#yum -y install tftp-server xinetd syslinux
#! sudo yum update -y
#! sudo vim /etc/sysconfig/selinux
#! sudo reboot
#! wget https://github.com/prometheus/prometheus/releases/download/v2.27.1/prometheus-2.27.1.linux-amd64.tar.gz
#! sudo useradd --no-create-home --shell /bin/false prometheus
#! sudo mkdir /etc/prometheus
#! sudo mkdir /var/lib/prometheus
#! sudo chown prometheus:prometheus /etc/prometheus
#! sudo chown prometheus:prometheus /var/lib/prometheus
#! tar -xvzf prometheus-2.27.1.linux-amd64.tar.gz
#! sudo mv prometheus-2.27.1.linux-amd64 prometheuspackage
#! sudo cp prometheuspackage/prometheus /usr/local/bin/
#! sudo cp prometheuspackage/promtool /usr/local/bin/
#! sudo chown prometheus:prometheus /usr/local/bin/prometheus
#! sudo chown prometheus:prometheus /usr/local/bin/promtool
#! sudo cp -r prometheuspackage/consoles /etc/prometheus
#! sudo cp -r prometheuspackage/console_libraries /etc/prometheus
#! sudo chown -R prometheus:prometheus /etc/prometheus/consoles
#! sudo chown -R prometheus:prometheus /etc/prometheus/console_libraries
#! sudo cd ~/scripts
#! sudo cp ./prometheus.yml /etc/prometheus/prometheus.yml
#! sudo cp ./prometheus.service /etc/prometheus/prometheus.service
#! sudo systemctl daemon-reload
#! sudo systemctl start prometheus
#! sudo systemctl status prometheus
