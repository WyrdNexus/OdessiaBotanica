# Odessia Botananica

The home of _The Odessia Project,_ and a tool for writing and collaboration.
 
 1. [Requirments](./docs/REQUIREMENTS.md)
 2. [Project Setup](./docs/SETUP.md)
 3. [Symfony](./docs/SYMFONY.md)
 4. [Project Planning](./docs/PLAN.md)
 5. [Unit Tests](./docs/TEST.md)
 
## User Roles

Role                | Description
------------------- | ------------
ROLE_AUTHOR         | Language Creator. Power over Stories and Entities
ROLE_ARTIST         | Visual Creator. Power over Graphics and Layouts 
ROLE_PRODUCER       | Auditory Creator. Power over Sounds and Scripts 
ROLE_DIRECTOR       | All Powers of Author, Artist, Producer. When added to a team, only a Director has Power over team Collections.
ROLE_MODERATOR      | Power to Destroy.
ROLE_ADMIN          | Power over Users.
ROLE_SUPER_ADMIN    | Power over Botanica

### Author, Artist, Producer
Users will start as a single of these.
Users can set themselves as any or all of these.

### Director
Upon creating a team, the creator becomes the Director of that team.  
Conts can then be made properties of the team. 

* Only the Director can create Collections. 
* Team member changes to Collections will require Director approval.
* Combined works (adding sound or graphics to a Story Cont) require Director approval.

Only on Director approval, or dissolution of the team, may Conts be removed from the team.
Only on Director approval may works be published.
