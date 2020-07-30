Many to many relationship tables: Ingredients can be in multiple entrees and each entree can be a part of many ingredients. Will implement basic CRUD functionality.

1. Entree Model and entrees table
2. Ingredients Model and ingredients table
3. Cooking Steps and cooking_steps table
4. Entrees_users pivot table

**Tables**

entrees:

- name: string
- price: int
- description: string
- id: int

ingredients:

- name: string
- description: string
- id:int

cooking_steps:

- description: string
- id: int
- step: int

entree_ingredient table:

- ingredient_id: int
- entree_id: int
- entree_num: foreign

entree {1}→cooking_steps{1}

Each entree field will be connected to each cooking steps field by id.

**Relationships**

Entrees - many to many - Ingredients

Entrees - one to many - Cooking steps