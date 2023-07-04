# Documentação do Trabalho Laravel

A API faz operações básicas como: criar tabela, ler tabela, buscar id na tabela, atualizar dados da tabela e excluir tabelas. 

## Apresentação
- Vídeos: https://youtu.be/fMKq1uHHMqQ
- https://youtube.com/shorts/Bf-b0bQQ2iY?feature=share

### Lista todas as tarefas do Banco de Dados

- Endpoint: /tasks
- Método que foi utilizado na rota:: GET
- Resposta: Lista todas as tarefas cadastradas.


### Cria uma nova tarefa

- Endpoint: /tasks
- Método que foi utilizado na rota:: POST
- Resposta: Cria uma nova tarefa de acordo com os dados fornecidos.
- Parâmetros:
   * Título da tarefa
   * Descrição da tarefa
   * Status da tarefa 


### Mostra os detalhes de uma tarefa específica

- Endpoint: /tasks/{id}
- Método que foi utilizado na rota: GET
- Resposta: Mostra os detalhes de uma tarefa específica com base no ID fornecido.
- Parâmetros:
* ID da tarefa


### Atualiza os dados de uma tarefa existente

- Endpoint: /tasks/{id}
- Método que foi utilizado na rota:: PUT
- Resposta: Atualiza os dados de uma tarefa existente com base no ID e novos dados fornecidos.
- Parâmetros:
	* ID da tarefa a ser atualizada
	* Novo título da tarefa
	* Nova descrição da tarefa
	* Novo status da tarefa 

### Exclui uma tarefa

- Endpoint: /tasks/{id}
- Método que foi utilizado na rota:: DELETE
- Resposta: Exclui uma tarefa com base no ID fornecido.
- Parâmetros:
	* ID da tarefa a ser excluída


