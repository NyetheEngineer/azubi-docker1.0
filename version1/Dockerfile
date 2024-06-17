# Use an official Nginx image as the base
FROM nginx:alpine

# Copy the HTML file and stylesheet into the Nginx web directory
COPY index.html /usr/share/nginx/html/
COPY style.css /usr/share/nginx/html/

# Expose port 80 to the outside world
EXPOSE 80
