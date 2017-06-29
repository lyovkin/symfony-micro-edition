# Symfony-micro-edition

Based on MicroKernelTrait `\Symfony\Bundle\FrameworkBundle\Kernel\MicroKernelTrait`

## Under the hood 

- [Symfony 3.2.*](http://symfony.com/)
- [DoctrineMongoDBBundle](http://symfony.com/doc/current/bundles/DoctrineMongoDBBundle/index.html) 
- [FOSRestBundle](https://symfony.com/doc/current/bundles/FOSRestBundle/index.html)
- [JMSSerializerBundle](http://jmsyst.com/bundles/JMSSerializerBundle)
- [NelmioApiDocBundle](https://symfony.com/doc/current/bundles/NelmioApiDocBundle/index.html)

## Dockerize your app

- clone repo `https://github.com/lyovkin/dockerize-symfony` in root folder
- cd dockerize-symfony
- cp .env.dist .env and in .env file specify the path to the project
- cp .docker-compose.override.yml.dist .docker-compose.override.yml.dist
- configure `/nginx/project.conf`
- run `docker-compose up -d --build`
- add local domain symfony.dev in /etc/host with local ip
- discover local ip, e.g.: `docker inspect default-nginx | grep IPAdress`
