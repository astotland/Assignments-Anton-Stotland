FROM ubuntu
RUN apt-get update -y   && \
    apt-get install php7.0-fpm -y
RUN mkdir home/task02
ADD helloDocker.php home/task02
CMD php home/task02/helloDocker.php
