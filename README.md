# 🚨 UploadFaille : Explorons les failles de sécurité dans les uploads d'images 🚨

**UploadFaille** est un projet éducatif qui démontre différents niveaux de sécurité liés aux uploads d'images en PHP, allant de l'absence totale de protection à une sécurité renforcée. Ce projet est conçu pour les étudiants en cybersécurité et les développeurs souhaitant comprendre et tester les vulnérabilités des systèmes d'upload.

## 🌟 Fonctionnalités

- **Niveau 1 : Aucun contrôle**
  - Exemple basique d'upload sans vérification de sécurité.
- **Niveau 2 : Vérification du type MIME**
  - Contrôle minimal pour éviter certaines attaques.
- **Niveau 3 : Sécurité intermédiaire**
  - Vérification du type MIME, de l'extension et de la taille du fichier.
- **Niveau 4 : Sécurité maximale**
  - Protection complète incluant la vérification de l'image, le nettoyage du nom de fichier et des validations avancées.

## ⚔️ Fichiers d'attaque inclus

Pour tester la robustesse des différents niveaux, des fichiers d'attaque sont fournis :
- `attack.php` : fichier PHP simple pour tester le niveau 1.
- `attack_image.php` : fichier déguisé en image avec du code PHP caché.
- `attack_image_with_code.jpg` : fichier JPG contenant du code dans les métadonnées.
- `attack_stegano.png` : fichier PNG utilisant la stéganographie.

## 🛠️ Installation et utilisation

1. Clonez le dépôt :
   ```bash
   git clone https://github.com/votre-utilisateur/UploadFaille.git
   cd UploadFaille
   ```

2. Placez les fichiers dans un environnement de serveur local (ex : XAMPP, MAMP).
3. Testez chaque niveau en accédant aux fichiers correspondants via votre navigateur.

## 🚧 Précautions

> **Attention** : Ce projet est à des fins éducatives seulement. Ne l'utilisez pas sur des serveurs en production ou sans les précautions nécessaires.

## 🔍 Explications pédagogiques

- **Niveau 1** : Facilement contourné par n'importe quel fichier.
- **Niveau 2** : Sécurise partiellement contre les types MIME modifiés.
- **Niveau 3** : Offre une sécurité intermédiaire mais reste vulnérable aux techniques avancées.
- **Niveau 4** : Prend en compte les meilleures pratiques pour garantir la sécurité des uploads.

## 🤝 Contribution

Vous avez des idées ou des améliorations à apporter ? Les contributions sont les bienvenues ! Créez un fork du projet, ajoutez vos modifications et soumettez une pull request.

## 🙏 Remerciements

Merci à tous ceux qui contribuent à la sensibilisation à la sécurité des applications web. Ensemble, nous pouvons rendre le web plus sûr ! 🌐

---

⭐️ N'oubliez pas de laisser une étoile si ce projet vous a aidé !
```
