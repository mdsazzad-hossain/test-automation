#! /bin/bash

echo "Hello sir i am working"

url=$(git config --get remote.origin.url)

if [ ! -z "$url" ] 
then
	echo "going forward"
	echo "$url"
	git status
	git add --all
	git commit -m "script done"
	git push origin master
	echo "Branch name: master"
	echo "Push done"
	exit
else
	git remote add origin https://github.com/mdsazzad-hossain/test-automation.git
	exit
	echo 'stop'
fi
