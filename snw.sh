NUMBER=`grep -rnw *.sql -e "Dump completed"`
        GREP=`grep -rnw *.sql -e "Dump completed" | tail -n1 | wc -l`
        if  [ "$GREP" -eq 1 ]; then
                echo " Success: Backup completed for $NUMBER" >> /tmp/test/test.txt
        else
                echo "'Dump completed' not found in the backup file" >> /tmp/test/test.txt
        fi
