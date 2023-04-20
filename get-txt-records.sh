#!/bin/bash

#domainsfile="./top10"
domainsfile="domains.txt"

while read domain
do
    echo "--"
    echo "[$(date)] CHECKING DOMAIN $domain"
    echo "--"

    #dig +short txt "$domain"
    host -W 5 -t txt "$domain"
done < "$domainsfile"
