Readme for UX4G NGINX

1.) Retrieve an authentication token and authenticate your Docker client to your registry.
aws ecr get-login-password --region ap-south-1 | docker login --username AWS --password-stdin 788384700272.dkr.ecr.ap-south-1.amazonaws.com

2.) Build your Docker image using the following command.
docker build . -f Dockerfile-design-system-html-base--no-cache -t design-system-html:base

3.) After the build completes, tag your image so you can push the image to this repository:

docker tag design-system-html:base 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:base

4.) Run the following command to push this image to your newly created AWS repository:

docker push 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:base

#BASE
docker build . -f Dockerfile-design-system-html-base -t design-system-html:base
docker tag design-system-html:base 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:base
docker push 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:base

#BETA
docker build . -f Dockerfile-design-system-html-beta -t design-system-html:beta
docker tag design-system-html:beta 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:beta
docker push 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:beta

#PROD
docker build . -f Dockerfile-design-system-html-prod -t design-system-html:prod
docker tag design-system-html:prod 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:prod
docker push 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:prod

#LOCAL
docker build . -f Dockerfile-design-system-html-local -t design-system-html:local
docker tag design-system-html:local 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:local
docker run -dit -p 8007:80 -v D:/design-system-html/src_code:/var/www --restart always --name design-system-html design-system-html:local
docker run -dit -p 8030:80 -v E:/Xampp/htdocs/local/ux4g/ux4g-website/src_code:/var/www --restart always --name design-system-html design-system-html:local

docker push 788384700272.dkr.ecr.ap-south-1.amazonaws.com/design-system-html:local


git add --all
git commit -m "updated"
git checkout master
git merge develop
git push origin develop master


docker run -dit -p 8004:80 -v D:/design-system-html/src_code:/var/www --restart always --name design-system-html-beta design-system-html:beta
