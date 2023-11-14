# Comandos SQL para operações de dados (CRUD)

## Resumo

- C: CREATE (INSERT) -> usando para inserir dados
- R: READ (SELECT) -> usado para ler/cconsultar dados
- U: UPDATE (UPDATE) -> usado para atualizar dados
- D: DELETE (DELETE) -> usado para excluir dados

## Exemplos

### INSERT na tabela de usuarios 

INSERT INTO usuarios (nome, email, senha, tipo) 
    VALUES (
    'Juan Martinez',
    'juan@gmail.com',
    'salada123',
    'admin'
);

INSERT INTO usuarios (nome, email, senha, tipo) 
    VALUES 
        (
            'Fulano da Silva',
            'fulano@gmail.com',
            '456',
            'editor'
        ), 
        (
            'Beltrano Soares',
            'beltrano@msn.com',
            '000penha',
            'admin'
        ),   
        (
            'chapolin Colarado',
            'chapolin@vingadores.com.br',
            'marreta',
            'editor'
        );

## SELECT na tabela de usuário (selecionar usuarios especificos usando WHERE "nome da coluna = 'admin'")

SELECT *(coluna) FROM usuarios (where); <!-- (sem o parenteses vai aparecer tudo) -->

## UPDATE em dados da tabela de usuários

UPDATE usuarios SET tipo = 'admin' WHERE id = 4; <!-- nunca esqueça de passar uma condição para o UPDATE, pois isso pode acarretar em um problemaço -->