# 🎓 Gestionnaire de Présence Universitaire  
Projet BDD / Réseaux – L3 Informatique (2024-2025)

## 📌 Contexte

Projet réalisé dans le cadre de la Licence 3 Informatique à CY Cergy Paris Université.

Objectif : concevoir et implémenter un système complet de gestion de présence comprenant :

- Une base de données relationnelle
- Une architecture réseau Client/Serveur
- Un site web connecté à la base de données
- Un système d’enregistrement des présences via lecteur de carte

👨‍🏫 Enseignant : M. Marc LEMAIRE  
👥 Groupe : Trinôme A8  
- Adnane BOUYKNANE  
- Khalifa MEBARKI  
- Samy-Mohamed BOUAOUNI  

---

# 🏗️ Architecture Globale
    ┌──────────────────────┐
    │   Carte Étudiante    │
    └──────────┬───────────┘
               │
               ▼
    ┌──────────────────────┐
    │  Lecteur de carte    │
    └──────────┬───────────┘
               │ TCP (Port 12345)
               ▼
    ┌──────────────────────┐
    │   Serveur Python     │
    │ (Validation & SQL)   │
    └──────────┬───────────┘
               │
               ▼
    ┌──────────────────────┐
    │  Base PostgreSQL     │
    └──────────┬───────────┘
               │
               ▼
    ┌──────────────────────┐
    │      Site Web PHP    │
    │ (Interface Prof/Etud)│
    └──────────────────────┘

---

# 🗄️ Base de Données

SGBD : **PostgreSQL**

## 📚 Principales tables

- Personnes
- Étudiants
- Enseignants
- Directeurs
- Cours
- Salles
- Groupes
- Départements
- Matériels
- Lecteurs
- Assister (gestion des présences)

## 🔗 Relations clés

- Un étudiant appartient à une personne
- Un cours est associé à une salle et un enseignant
- Une présence relie un étudiant à un cours
- Un lecteur est lié à une salle

---

# 🌐 Partie Réseau

## ⚙️ Technologies

- Client : **Java**
- Serveur : **Python**
- Protocole : **TCP**
- Port : **12345**
- Tests : **ncat**

## 🔁 Fonctionnement

1. Envoi ID lecteur
2. Vérification en base
3. Envoi numéro carte
4. Vérification
5. Envoi numéro étudiant
6. Enregistrement présence

### ✅ Sécurité implémentée

- Vérification taille buffer
- Nettoyage des entrées (anti injection)
- Fichier de configuration externe pour les accès BDD
- Gestion des erreurs (timeout, host inconnu, etc.)

---

# 💻 Partie Web

Technologies :

- PHP
- HTML/CSS
- PDO (connexion sécurisée)
- Sessions

## Fonctionnalités :

- Page actualités (statistiques dynamiques)
- Inscription utilisateur
- Connexion sécurisée
- Profil utilisateur
- Modification mot de passe

🌍 URL :  
https://mebarki.alwaysdata.net/

---

# 🧪 Tests Réseau

Tests réalisés avec `ncat` :

- Test serveur ↔ client
- Vérification validation lecteur
- Vérification carte étudiante
- Vérification étudiant
- Gestion des doublons
- Vérification en base après insertion

---

# 🛠️ Stack Technique

- PostgreSQL
- Python (psycopg2)
- Java (Socket)
- PHP (PDO)
- TCP/IP
- ncat
- AlwaysData (hébergement)

---

# 🎯 Objectifs pédagogiques

- Modélisation E/A et schéma relationnel
- Implémentation client/serveur TCP
- Connexion sécurisée à une BDD
- Développement d’un site web dynamique
- Gestion d’architecture complète multi-couches

---

# 📅 Version

Version finale – 28 Novembre 2024

---

# 🙏 Remerciements

Merci aux enseignants pour l’accompagnement :

- JEN Tao-Yuan (Bases de données)
- DANG NGOC TUYET Tram (Réseaux)
- Marc LEMAIRE (Suivi projet)

---

# 👤 Auteurs

Projet réalisé par :

Adnane BOUYKNANE  
Khalifa MEBARKI  
Samy-Mohamed BOUAOUNI  
