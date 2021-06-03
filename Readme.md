1. Clone this repo or download with zip

2. Copy environtment from example
```
cp .env.example .env
```

3. Install Docker from official website
https://docs.docker.com/get-docker/

4. Start Docker and open folder git

5. Build docker from image
```
docker-compose build app
```

6. Start application in background
```
docker-compose up -d
```

7. Install library with composer
```
docker-compose exec app composer install
```

8. Run in browser
http://localhost:8004
