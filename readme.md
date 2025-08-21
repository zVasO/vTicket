
---

## 🔹 Couches et responsabilités

### 1. Domain (Cœur métier)
- Contient la **logique métier pure**, sans dépendances externes.
- **Entités (`Entity`)** : objets principaux avec état et comportements (`Ticket`, `User`).
- **Value Objects (`ValueObject`)** : objets immuables avec validation (`Email`, `TicketStatus`).
- **Domain Services (`Service`)** : logique métier qui ne tient pas dans une entité.
- **Repository Interfaces (`Repository`)** : contrats pour accéder aux entités (`TicketRepositoryInterface`).
- **Domain Events (`Event`)** : événements métier déclenchés lors d’actions (`TicketCreatedEvent`).

**Ne contient pas** : Doctrine, Symfony, API externes, logique d’affichage.

---

### 2. Application (Orchestration)
- Coordonne le **domaine pour réaliser des actions concrètes**.
- **Command** : objets représentant une action (`CreateTicketCommand`).
- **Query** : objets représentant une lecture (`GetUserByIdQuery`).
- **Handler** : exécution des Commands/Queries.
- **Application Services** : orchestration de plusieurs services ou logique métier combinée.

**Ne contient pas** : logique métier pure seule, dépendances techniques.

---

### 3. Infrastructure (Implémentations techniques)
- Fournit les **implémentations concrètes** pour Domain ou Application.
- **Persistence/Doctrine** : implémentations des Repository interfaces (`DoctrineTicketRepository`).
- **Services techniques** : mailer, API externes, stockage.
- **Shared/Traits** : traits techniques réutilisables (`EnumHelper`).

**Ne contient pas** : logique métier pure.

---

### 4. UI (Interface utilisateur)
- Interface avec l’extérieur (HTTP, CLI, etc.).
- **HTTP Controllers** : routes web et API (`TicketController.php`).
- **CLI Commands** : commandes console Symfony (`ImportTicketsCommand.php`).

**Ne contient pas** : logique métier directe.

---

## 🔹 Conventions pour Enums et Traits

- **Enums métier** → Domain/ValueObject (ex: `TicketStatus`, `UserRole`).
- **Traits métier** → Domain/Shared/Traits si lié au domaine.
- **Traits techniques/utilitaires** → Infrastructure/Shared/Traits (ex: `EnumHelper`).

---

## 🔹 Bonnes pratiques

- **Domain** : logique métier pure uniquement.
- **Application** : orchestration de cas d’usage.
- **Infrastructure** : implémentations concrètes.
- **UI** : uniquement interface, pas de logique métier.
- **Séparer les responsabilités** clairement pour faciliter tests, maintenance et évolutivité.
- **Utiliser les interfaces** pour abstraire le stockage et les services externes.

---

Ce README sert de **référence pour tous les développeurs du projet** afin de respecter l’architecture DDD et maintenir la cohérence.
