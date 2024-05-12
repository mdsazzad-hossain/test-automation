#! /bin/bash

echo "script working..."

url=$(git config --get remote.origin.url)
branch_name=$(git branch --show-current)

if [ ! -z "$url" ] 
then
	echo "$url"
	echo "Branch name: $branch_name"

	git status
	git add --all
	git commit -m "script update"
	git push origin master

	echo "Git push successfull."
	exit
else
	git remote add origin https://github.com/mdsazzad-hossain/test-automation.git

	echo "Git remote url setup successfull."
	exit
fi
