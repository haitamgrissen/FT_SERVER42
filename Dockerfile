FROM debian:buster

COPY srcs/* ./
RUN bash /scirpt.sh

