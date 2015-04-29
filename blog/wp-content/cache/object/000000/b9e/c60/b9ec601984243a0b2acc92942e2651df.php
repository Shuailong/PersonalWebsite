ۋ@U<?php exit; ?>a:1:{s:7:"content";O:8:"stdClass":23:{s:2:"ID";s:3:"256";s:11:"post_author";s:1:"1";s:9:"post_date";s:19:"2015-03-11 14:37:37";s:13:"post_date_gmt";s:19:"2015-03-11 06:37:37";s:12:"post_content";s:462:"Sublime2 Package Control Installation Script
<pre>import urllib2,os; 
pf='Package Control.sublime-package'; 
ipp=sublime.installed_packages_path(); 
os.makedirs(ipp) if not os.path.exists(ipp) else None; 
urllib2.install_opener(urllib2.build_opener(urllib2.ProxyHandler())); 
open(os.path.join(ipp,pf),'wb').write(urllib2.urlopen('http://sublime.wbond.net/'+pf.replace(' ','%20')).read()); 
print 'Please restart Sublime Text to finish installation'</pre>";s:10:"post_title";s:14:"Sublime Script";s:12:"post_excerpt";s:0:"";s:11:"post_status";s:7:"publish";s:14:"comment_status";s:4:"open";s:11:"ping_status";s:4:"open";s:13:"post_password";s:0:"";s:9:"post_name";s:14:"sublime-script";s:7:"to_ping";s:0:"";s:6:"pinged";s:0:"";s:13:"post_modified";s:19:"2015-03-11 14:37:37";s:17:"post_modified_gmt";s:19:"2015-03-11 06:37:37";s:21:"post_content_filtered";s:0:"";s:11:"post_parent";s:1:"0";s:4:"guid";s:31:"http://shuailong.me/blog/?p=256";s:10:"menu_order";s:1:"0";s:9:"post_type";s:4:"post";s:14:"post_mime_type";s:0:"";s:13:"comment_count";s:1:"0";}}