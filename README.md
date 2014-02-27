### Contexte de JSupport
Le projet *JSupport* est un lot d'Extensions pour Joomla 3.
Vous pouvez télécharger sur GitHub tous les sources des Extensions présentées dans ce livre.

Le code source des Extensions de ce référentiel inclut l'implémentation des classes principales du Framework Joomla Platform :
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
[`ZIP complet`](https://github.com/garstud/JSupport/archive/master.zip) | tous les dossiers des Extensions ci-dessous


#### Composants : [`Frontend / Backend`](https://github.com/garstud/JSupport/tree/master/composants "Espace des Composants")
- `/JSupport/composants/1-compoFE` : pour utiliser le 1er [composant FrontEnd](https://github.com/garstud/JSupport/tree/master/docs/manual/fr-FR/extensions) simple
- `/JSupport/composants/2-compoFE` : pour utiliser le composant FrontEnd avancé
- `/JSupport/composants/3-compoFE` : pour utiliser le composant FrontEnd complet
- `/JSupport/composants/4-compoBE` : pour utiliser le 1er composant BackEnd de liste simple
- `/JSupport/composants/5-compoBE` : pour utiliser le composant BackEnd complet

#### Modules : [`Mod`](https://github.com/garstud/JSupport/tree/master/modules)
- `/JSupport/modules/1-mod_simple` : pour utiliser le 1er module simple
- `/JSupport/modules/2-mod_ticket` : pour utiliser le module d'affhage de "Mes tickets"

#### Plugins : [`Plg`](https://github.com/garstud/JSupport/tree/master/plugins)
- `/JSupport/plugins/1-plg_content_ticket` : pour utiliser un Plugin d'affichage d'un ticket dans un article
- `/JSupport/plugins/2-plg_user_profileticket` : pour utiliser le Plugin d'extension de profil utilisateur
- `/JSupport/plugins/3-plg_support_ticket` : pour utiliser le Plugin dédié à étendre le Composant JSupport

#### Applications autonomes : [`CLI / WebApp`](https://github.com/garstud/JSupport/tree/master/apps)
- `/JSupport/apps/1-cli_tickets` : pour utiliser le script de commande en ligne
- `/JSupport/apps/2-web_tickets` : pour utiliser l'application Web autonome


### Auteur
Contactez Marc STUDER (@garstud) ou sur http://www.garstud.com/nous-contacter.html .
Ou retrouvez l'espace dédié à ce livre sur http://xxx.garstud.com
