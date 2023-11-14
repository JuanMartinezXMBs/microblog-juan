# Comandos SQL para operações de dados (CRUD)

## Resumo

- C: CREATE (INSERT) -> usando para inserir dados
- R: READ (SELECT) -> usado para ler/cconsultar dados
- U: UPDATE (UPDATE) -> usado para atualizar dados
- D: DELETE (DELETE) -> usado para excluir dados

## Exemplos

### INSERT na tabela de usuarios 
```sql
INSERT INTO usuarios (nome, email, senha, tipo) 
    VALUES (
    'Juan Martinez',
    'juan@gmail.com',
    'salada123',
    'admin'
);
```
```sql
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
```

## SELECT na tabela de usuário (selecionar usuarios especificos usando WHERE "nome da coluna = 'admin'")

SELECT *(coluna) FROM usuarios (where); -- (sem o parenteses vai aparecer tudo)

## UPDATE em dados da tabela de usuários

UPDATE usuarios SET tipo = 'admin' WHERE id = 4; 
-- nunca esqueça de passar uma condição para o UPDATE, pois isso pode acarretar em um problemaço 

## DELETE em dados da tabela de usuários

DELETE FROM usuarios WHERE id = 2;

-- nunca esqueça de passar uma condição para o DELETE, pois isso pode acarretar em um problemaço 

### INSERT na tabela de noticias

```sql
INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'Descoberto oxigênio em venus',
    'O oxigênio é produzido no lado diurno do planeta pela radiação ultravioleta do Sol, que quebra o dióxido de carbono atmosférico e o monóxido de carbono em átomos de oxigênio e outros produtos químicos, disseram os pesquisadores...',
    'O oxigênio é produzido no lado diurno do planeta pela radiação ultravioleta do Sol...',
    'venus.jpg',
    1
);
```
```sql
INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'Nova versão do VScode',
    'Uma nova versão do VScode foi lançada nessa manhã de terça-feira dia 14/11/2023, com varias novas utilidasdes e compatiblilidades, ele promete melhorar desde desempenho a uma IA integrada, com acitação a desenvolvimento SWIFT',
    'Uma nova versão do VScode foi lançada nessa manhã de terça-feira dia 14/11/2023',
    'VScodeATT.jpg',
    4
);
```
```sql
INSERT INTO noticias (titulo, texto, resumo, imagem, usuario_id)
VALUES(
    'Energia Solar? ou preços altos?',
    'Um video esta viralizando na internet, um rapaz usando o calor do asfalto e uma frigideira para fritar ovo! o rapaz disse em entrevista aos nossos reporters: "com essa onda de calor e com os preços das coisas, a gente tem que aprender a se virar com oque tem", mesmo que tenha dado certo e tenha sido divertido, um alerta para as altas temperaturas nos indicam que se o ser humano não cuidar as coisas vão esquentar...',
    'Um video esta viralizando na internet, um rapaz usando o calor do asfalto e uma frigideira para fritar ovo!',
    'fritandoOVO.jpg',
    1
);
```
### Objetivo: consulta que mostre a data e o titulo da noticia e o nome do autor desta noticia

#### SELECT.JOIN (CONSULTA COM JUNÇÃO DE TABELAS)

```sql
-- Especificamos o nome da coluna com o nome da tabela 
SELECT 
    noticia.data, 
    noticia.titulo, 
    usuarios.nome 

-- Especificando quais tabelas serão relacionadas
FROM noticias JOIN usuarios

-- Criterio para a junção
-- estamos comparadando a chave estrangeira(FK) com a chave primaria (PK)
ON noticias.usuario_id = usuario.id

-- OPCIONAL (ordenação pela data, das noticias mais recentes primeiro (DESC = ordem decrescente))
ORDER by data DESC;
```