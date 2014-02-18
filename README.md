### Contexte de JSupport
Le projet *JSupport* est un lot d'extension pour Joomla 3.
Vous pouvez télécharger sur le présent repo Github tous les codes sources des extensions présentées dans ce livre.

Le code des extensions de ce référentiel inclus l'implémentation des classes principales du Framework Joomla Platform :
```php
$app = JFactory::getApplication('site');

JPluginHelper::importPlugin('system');
$this->triggerEvent('onAfterRoute');

$user     = JFactory::getUser();
$userId   = $user->get('id');
$asset    = 'com_content.article.' . $recordId;
if ($user->authorise('core.edit', $asset))
... etc
```
Afin de vous accompagner dans le développement d'extensions pour Joomla.

### Liste des extensions de JSupport
JSupport propose un Panel complet des extensions Joomla (composants, modules, plugins ...).

Pour utiliser ces extensions, téléchargez le ZIP de la totalité des extensions, puis dézippez le afin de ne re-zipper que chacun des sous-dossiers souhaités.

Option        | Description
------------- | ----------------
ZIP           | tous les dossiers des extensions


#### Composants [`FE`](composants/README.md) / [BE]`(composants)`
- `/JSupport/composants/1-compoFE` : pour utiliser le 1er [composant FrontEnd](docs/manual/fr-FR/extensions/compo-fe.md) simple
- `/JSupport/composants/2-compoFE` : pour utiliser le composant FrontEnd avancé
- `/JSupport/composants/3-compoFE` : pour utiliser le composant FrontEnd complet
- `/JSupport/composants/4-compoBE` : pour utiliser le 1er composant BackEnd de liste simple
- `/JSupport/composants/5-compoBE` : pour utiliser le composant BackEnd complet

#### Modules
- `/JSupport/modules/1-mod_simple` : pour utiliser le 1er module simple
- `/JSupport/modules/2-mod_ticket` : pour utiliser le module d'affhage de "Mes tickets"

#### Plugins
- `/JSupport/plugins/1-plg_content_ticket` : pour utiliser un plugin d'affichage d'un ticket dans un article
- `/JSupport/plugins/2-plg_user_profileticket` : pour utiliser le plugin d'extension de profil utilisateur
- `/JSupport/plugins/3-plg_support_ticket` : pour utiliser le plugin dédié a JSupport

#### Applications autonomes
- `/JSupport/apps/1-cli_tickets` : pour utiliser le script de commande en ligne
- `/JSupport/apps/2-web_tickets` : pour utiliser l'application Web autonome


### Auteur
Contactez Marc STUDER (@garstud) ou sur http://www.garstud.com/nous-contacter.html .
Ou retrouvez l'espace dédié à ce livre sur http://xxx.garstud.com
