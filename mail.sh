#!/bin/bash
# delete mails after 30 days
find mail/ -type f -mtime +30 -exec rm {} \;
