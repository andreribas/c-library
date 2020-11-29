# C Library

Pequeno sistema desenvolvido em PHP para a matérida de Desenvolvimento em PHP
no curso de Análise e Desenvolvimento de Sistemas na Universidade Positivo.


# Utilização

```
docker-compose up
```

Com o container rodando basta acessar a url: http://localhost:8000

# Estrutura

O sistema foi desenvolvido utilizando o pattern MVC. Alguns pontos de interesse do sistema:

- **config/routes.php**: Define as rotas do sistema
- **lib/Controller**: Contém os controllers
- **lib/Model**: Contém os models
- **lib/Repository**: Contém os repositories que lidam com a persistencia dos models no banco de dados
- **templates**: Contém os templates utilizados para gerar as páginas

# Telas
Tela inicial:
![image](https://user-images.githubusercontent.com/605008/100555757-7c704c80-327c-11eb-9d2a-e67a093fcb83.png)

Listagem de Headers:
![image](https://user-images.githubusercontent.com/605008/100555820-da9d2f80-327c-11eb-84f8-1266cb6a7d94.png)

Listagem de Functions:
![image](https://user-images.githubusercontent.com/605008/100555833-eb4da580-327c-11eb-87cb-37564266969a.png)

Detalhes de uma Function:
![image](https://user-images.githubusercontent.com/605008/100555849-091b0a80-327d-11eb-8250-1955225536b8.png)

Edição de uma Function:
![image](https://user-images.githubusercontent.com/605008/100555896-3c5d9980-327d-11eb-8b81-7e549005da9e.png)

Resultado de busca:
![image](https://user-images.githubusercontent.com/605008/100555865-1c2dda80-327d-11eb-9d29-c45efdd31f11.png)

