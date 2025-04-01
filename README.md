Разработка простого API для управления задачами
Требуется реализовать REST API для управления списком задач (To-Do List) на PHP с
использованием Laravel.

## 🚀 Функциональность
- **Создание задачи: POST /tasks (поля: title, description, status).**
- **Просмотр списка задач: GET /tasks (возвращает все задачи).**
- **Просмотр одной задачи: GET /tasks/{id}.**
- **Обновление задачи: PUT /tasks/{id}.**
- **Удаление задачи: DELETE /tasks/{id}.**

## 🛠 Используемые технологии
-  **PHP 8.2**, **Laravel 12**
-  **MySQL**, **PhpMyAdmin**
-  **Docker + Docker Compose**
-  **Migrations & Seeders**

## ⚡ Запуск проекта

### 1️⃣ Запуск контейнеров:
```bash
docker-compose up -d --build
```
