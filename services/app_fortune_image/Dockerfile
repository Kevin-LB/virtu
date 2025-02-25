# Utiliser l'image de base PHP avec Apache
FROM php:7.4-apache


RUN apt update
RUN apt install -y fortune imagemagick

# Copier le fichier PHP dans le répertoire racine du serveur
COPY index.php /var/www/html/
COPY images /var/www/html/images
COPY convert.sh /root
RUN chmod +x /root/convert.sh
RUN /root/convert.sh
# Exposer le port 80
EXPOSE 80
