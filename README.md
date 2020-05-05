# docker-v3-quick-lamp-dev-env

### Warning
There is a downside to everyhing useful.

Since this repository allows you to quickly setup everyhing, some important secrets like passwords for db are stored publicly. 
When you start using, change those secrets and never expose your project to public repository. 

Or you can move on to other lamp images (there are many similar images out there)

## About
Yet another lamp stack for quick development.

### Requirements
 - docker
 - docker-compose

## Getting started
1) clone the repository. 

```
git clone https://github.com/AC34/docker-v3-quick-lamp
```
2) building

Navigate to the cloned directory and run:
```
docker-compose -f docker-compose.up.yml build
```

3) running

Once the images are  built, you can always run the following and start your development cycle:
```
docker-compose -f docker-compose.up.yml up
```
4) Accessing

Access via your favourite web browser.

accessing php app:
```
  localhost:80
```
accessing phpmyadmin:
  ```
  localhost:4000
  ```
  You can also tell the language by GET method:
  ```
  localhost:4000?lang=en
  ```

5) Running Test

```
docker-compose -f docker-compose.test.yml up
```
The composer script name "dotest" will be called by docker-compose.

Update the "dotest" part to make changes to suit for your tests.

