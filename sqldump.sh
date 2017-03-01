#FILE=/var/www/html
find /etc/chef/*.pem  -mtime -7 -printf '%Cc %s %f\n' | sort -nr | head -n 20 | sed 's/[^ ]\+ //' > /tmp/test/test.txt
        FILE=/tmp/test/test.txt
        if [ -s $FILE ] ; then
        echo "$FILE has data."
        #sshpass -p '$w$np@llow@123' scp $FILE SNPAdmin@chef-workstation-snp:/tmp
        #sshpass -p '$w$np@llow@123' ssh SNPAdmin@chef-workstation-snp cat "/tmp/test.txt | mailx -s "this is test mail from chef cookbook run" suvadip@snp.com"
        else
        echo "$FILE is empty." >> /tmp/test/test.txt
fi
NUMBER=`grep -rnw *.sql -e "Dump completed"`
GREP=`grep -rnw *.sql -e "Dump completed" | tail -n1 | wc -l`
if  [ "$GREP" -eq 1 ]
 then
   echo " Success: Backup completed for $NUMBER" >> /tmp/test/test.txt
 fi
