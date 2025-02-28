# KN01

## WSL Status prüfen
```sh
wsl --status
```
Zeigt den Status von Windows Subsystem for Linux (WSL) an.

## Docker-Images suchen
```sh
docker search ubuntu
docker search nginx
```
Sucht nach verfügbaren Docker-Images für Ubuntu und Nginx im Docker Hub.

## Container starten
```sh
docker run -d -p 80:80 docker/getting-started
```
- `docker run` → Erstellt einen neuen Container
- `-d` → Führt den Container im Hintergrund aus
- `-p 80:80` → Mappt den Port des Containers auf den Host
- `docker/getting-started` → Name des verwendeten Images

## Nginx Image herunterladen, Container erstellen und starten
```sh
docker pull nginx
docker create -p 8081:80 --name my-nginx nginx
docker start my-nginx
```
- `docker pull nginx` → Lädt das Nginx-Image herunter
- `docker create -p 8081:80 --name my-nginx nginx` → Erstellt einen Container mit Port-Mapping
- `docker start my-nginx` → Startet den erstellten Container

## Ubuntu Container starten
```sh
docker run -d ubuntu
```
**Kommentar:** Falls das Image nicht vorhanden ist, wird es automatisch heruntergeladen. Da Ubuntu kein Dienst wie ein Webserver ist, beendet sich der Container direkt nach dem Start. Hintergrundprozesse sind nötig, damit der Container weiterläuft.

## Interaktiven Ubuntu Container starten
```sh
docker run -it ubuntu
```
**Kommentar:** Öffnet eine Bash-Shell, in der Befehle im Container ausgeführt werden können. Der Container bleibt aktiv, solange die Shell geöffnet ist.

## In einen laufenden Container eintreten
```sh
docker exec -it my-nginx /bin/bash
exit
```
- `docker exec -it my-nginx /bin/bash` → Öffnet eine interaktive Bash-Shell im laufenden Container
- `exit` → Verlässt die Shell

## Container stoppen und entfernen
```sh
docker stop my-nginx
docker rm $(docker ps -aq)
```
- `docker stop my-nginx` → Stoppt den Container
- `docker rm $(docker ps -aq)` → Entfernt alle gestoppten Container

## Images entfernen
```sh
docker rmi nginx ubuntu
```
- Entfernt die Images für `nginx` und `ubuntu`

## Docker-Image taggen und hochladen
```sh
docker pull nginx:latest
docker tag nginx:latest levinwiederkehr/m347:nginx
docker push levinwiederkehr/m347:nginx
```
- `docker pull nginx:latest` → Lädt das neueste Nginx-Image herunter
- `docker tag nginx:latest levinwiederkehr/m347:nginx` → Erstellt einen neuen Tag für das Image
- `docker push levinwiederkehr/m347:nginx` → Lädt das getaggte Image in das eigene Docker Hub Repository hoch

## MariaDB-Image taggen und hochladen
```sh
docker pull mariadb:latest
docker tag mariadb:latest levinwiederkehr/m346:mariadb
docker push levinwiederkehr/m346:mariadb
```
- `docker pull mariadb:latest` → Lädt das neueste MariaDB-Image herunter
- `docker tag mariadb:latest levinwiederkehr/m346:mariadb` → Erstellt einen neuen Tag für das Image
- `docker push levinwiederkehr/m346:mariadb` → Lädt das getaggte Image in das eigene Docker Hub Repository hoch
