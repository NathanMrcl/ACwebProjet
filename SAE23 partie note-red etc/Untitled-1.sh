#!/bin/bash
echo 'starting process recuperation'
echo ''
echo ''

docker start noderedRT
docker start grafanaRT
docker start influxdbRT

ip=$(hostname -i | cut -d ' ' -f1)
#recuperation of the captor IP

echo 'Welcome to public script of sae 23'
echo '**********************************'
echo 'this script $ip used for publish some data to catch it with the web server or others things'
echo '**********************************'
echo ''
echo '**********************************'
echo ''
echo 'enjoy it'

while true
do 
    echo 'creating data'
    echo 'creating data.'
    echo 'creating data..'
    echo 'creating data....'
    echo 'creating data........'


    #creation of a random number between 19 and 22
    gene_temp_s1_b1=$(shuf -i 19-22 -n1)
    gene_temp_s2_b1=$(shuf -i 19-21 -n1)
    gene_temp_s1_b2=$(shuf -i 18-22 -n1)
    gene_temp_s2_b2=$(shuf -i 18-21 -n1)

    echo 'creating data succefully !!'

    echo 'publishing.'
    echo 'publishing...'
    echo 'publishing.......'

    mosquitto_pub -h $ip -u user -P passroot -t iut/E208 -m "$gene_temp_s1_b1"
    mosquitto_pub -h $ip -u user -P passroot -t iut/E209 -m "$gene_temp_s2_b1"
    mosquitto_pub -h $ip -u user -P passroot -t iut/A102 -m "$gene_temp_s1_b2"
    mosquitto_pub -h $ip -u user -P passroot -t iut/A103 -m "$gene_temp_s2_b2"
    #publication of figures in 4 different topics

    echo 'publishing succesfuly !!'

    sleep 2O
    #data generation and transmission every 20 seconds

done
