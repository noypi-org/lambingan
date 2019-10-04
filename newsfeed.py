#!/usr/bin/python
import feedparser, json, requests

d =[]
f = feedparser.parse('https://news.google.com/rss?hl=en-PH&gl=PH&ceid=PH:en')
for p in f.entries:
   l = requests.head(p.link).headers['Location']
   d.append({'title':p.title, 'link':l, 'pubts':p.published})

with open('/usr/share/nginx/lambingan/newsfeed.json','w') as j:
   json.dump(d, j)
