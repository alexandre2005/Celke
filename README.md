- Projeto desenvolvido com Laravel 12 e Vue.js. Como criar o projeto com Laravel e Vue.js?

- Código fonte desenvolvido na aulas: [Acessar as aulas](https://www.youtube.com/watch?v=81_ekTuWS9o&list=PLmY5AEiqDWwDHq8cRYAJyfIyl5jDSVvcX).

## Requisitos

* PHP 8.2 ou superior - Conferir a versão: php -v
* MySQL 8 ou superior;
* Composer - Conferir a instalação: composer --version
* Node.js 22 ou superior - Conferir a versão: node -v
* GIT - Conferir se está instalado o GIT: git -v

## Como rodar o projeto baixado

Baixar os arquivos do GitHub.
```
git clone https://github.com/celkecursos/tutorial-laravel12-vuejs.git .
```

- Duplicar o arquivo ".env.example" e renomear para ".env".

- Para a funcionalidade enviar e-mail funcionar, necessário alterar as credenciais do servidor de envio de e-mail no arquivo .env.
- Utilizar o servidor fake durante o desenvolvimento: [Acessar envio gratuito de e-mail](https://mailtrap.io?ref=celke)
- Utilizar o servidor Iagente no ambiente de produção: [Acessar envio gratuito de e-mail](https://login.iagente.com.br/solicitacao-conta-smtp/origin/celke)
```
MAIL_MAILER=smtp
MAIL_SCHEME=null
MAIL_HOST=sandbox.smtp.mailtrap.io
MAIL_PORT=2525
MAIL_USERNAME=nome-do-usuario-na-mailtrap
MAIL_PASSWORD=senha-do-usuario-na-mailtrap
MAIL_FROM_ADDRESS="colocar-email-remetente@meu-dominio.com.br"
MAIL_FROM_NAME="${APP_NAME}"
```

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js.
```
npm install
```

Gerar a chave no arquivo .env.
```
php artisan key:generate
```

Executar as migrations para criar as tabelas e as colunas.
```
php artisan migrate
```

Executar as seeders para cadastrar os dados de teste.
```
php artisan db:seed
```

Rodar o projeto local.
```
composer run dev
```

Acessar a página criada com Laravel.
```
http://127.0.0.1:8000
```

Limpar o cache quando a tela ficar em branco.
```
php artisan route:clear
php artisan view:clear
php artisan config:clear
php artisan cache:clear
php artisan optimize:clear
```
- Reiniciar o servidor.

## Como usar a VPS da Hostinger para fazer o deploy do Laravel 12 e Vue.js

- [Ganhe 20% de desconto adicional na Hostinger](https://www.hostinger.com.br/referral?REFERRALCODE=1CESARNICOL13)

- Cupom para ganhar 10% de desconto na Hostinger — não cumulativo com o link acima: celke

Senha usada na aula, não utilizar a mesma: 52F3a8#9f65x

## Conectar o PC ao servidor com SSH

Criar chave SSH (chave pública e privada).
```
ssh-keygen -t rsa -b 4096 -C "seu-email@exemplo.com"
```
```
ssh-keygen -t rsa -b 4096 -C "cesar@celke.com.br"
```

Local que é criado a chave pública.
```
C:\Users\SeuUsuario\.ssh\
```
```
C:\Users\cesar/.ssh/
```

Exibir o conteúdo da chave pública.
```
cat ~/.ssh/id_rsa.pub
```

Acessar o servidor com SSH.
```
ssh usuario-do-servidor@ip-do-servidor-vps
```
```
ssh root@72.60.151.152
```

Usar o terminal conectado ao servidor para listar os arquivo.
```
cd /caminho-dos-arquivos-no-servidor
```
```
cd /home/user/htdocs/srv1149500.hstgr.cloud
```

Listar os arquivo.
```
ls
```

Remover os arquivos do servidor.
```
rm -rf /home/user/htdocs/endereco-do-servidor/{*,.*}
```
```
rm -rf /home/user/htdocs/srv1149500.hstgr.cloud/{*,.*}
```

## Como enviar o projeto do PC para o GitHub.

Inicializar um novo repositorio GIT.
```
git init
```

Adicionar todos os arquivos modificados na área de preparação.
```
git add .
```

Verificar em qual branch está.
```
git branch
```

Renomear a branch atual no GIT para main.
```
git branch -M main
```

Commit registra as alterações feitas nos arquivos que foram adicionados na área de preparação.
```
git commit -m "Base do projeto"
```

Adicionar um repositório remoto ao repositório local.
```
git remote add origin https://github.com/celkecursos/tutorial-laravel12-vuejs-v2.git
```

Enviar os commits locais para um repositório remoto.
```
git push -u origin main
```

## Conectar Servidor ao GitHub

Gerar a chave SSH no servidor.
```
ssh-keygen -t rsa -b 4096 -C "cesar@celke.com.br"
```

Imprimir a chave pública gerada.
```
cat ~/.ssh/id_rsa.pub
```

- No GitHub, vá para Settings (Configurações) do seu repositório ou da sua conta, em seguida, vá para SSH and GPG keys e clique em New SSH key. Cole a chave pública no campo fornecido e salve.

Verificar a conexão com o GitHub.
```
ssh -T git@github.com
```

- Se gerar o erro "The authenticity of host 'github.com (xx.xxx.xx.xxx)' can't be established.". Isso é uma medida de segurança para evitar ataques de "man-in-the-middle". Necessário adicionar a chave do host do GitHub ao arquivo de known_hosts do seu servidor.

Digite yes quando for solicitado.
```
Are you sure you want to continue connecting (yes/no/[fingerprint])? yes
```

Verificar a conexão novamente.
```
ssh -T git@github.com
```

- Mensagem de conexão realizada com sucesso. Hi nome-usuario! You've successfully authenticated, but GitHub does not provide shell access.

## Clonar o projeto do GitHub para a VPS

Baixar os arquivos do GitHub para a VPS.
```
git clone -b <branch_name> <ssh_repository_url> .
```
```
git clone https://github.com/celkecursos/tutorial-laravel12-vuejs.git .
```

Duplicar o arquivo ".env.example" e renomear para ".env".
```
cp .env.example .env
```

Abrir o arquivo ".env" e alterar as variaveis de ambiente.
```
nano .env
```

Alterar o valor das variaveis de ambiente.
```
APP_NAME=Celke
APP_ENV=production
APP_KEY=
APP_DEBUG=false
APP_TIMEZONE=America/Sao_Paulo
APP_URL=https://srv566492.hstgr.cloud 
```

Alterar as variaveis de conexão com banco de dados.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=celke
DB_USERNAME=root
DB_PASSWORD=
```

- Ctrl + O e enter para salvar.
- Ctrl + X para sair.

Instalar as dependências do PHP.
```
composer install
```

Instalar as dependências do Node.js. Necessário ter o Node.js instalado no servidor. Abaixo tem as orientações como instalar o Node.js no servidor.
```
npm run build
```

Quando gerar o erro "sh: 1: vite: not found", necessário instalar o Vite. Executar e Etapa 1, Etapa 2 e Etapa 3.
```
npm install
```

Etapa 1 - Verificar se o Vite está instalado.
```
npx vite --version
```

Etapa 2 - Gerar a build. Compilar o código-fonte do projeto.
```
npm run build
```

Alterar a propriedade do diretório.
```
sudo chown -R user:user /home/user/htdocs/srv1149500.hstgr.cloud
```

Reiniciar Nginx.
```
sudo systemctl restart nginx
```

Limpar cache.
```
php artisan config:clear
```

Gerar a chave.
```
php artisan key:generate
```

Executar as migrations para criar as tabelas e as colunas.
```
php artisan migrate
```

Executar seed com php artisan para cadastrar registros de testes.
```
php artisan db:seed
```

## Instalar o Node.js no servidor.

Atualizar a lista de pacotes disponíveis.
```
sudo apt update
```

Adicionar no repositório o Node.js 22.x.
```
curl -fsSL https://deb.nodesource.com/setup_22.x | sudo -E bash -
```

Instalar o Node.js. -y automatizar a instalação de pacotes sem solicitar a confirmação manual do usuário.
```
sudo apt install -y nodejs
```

Reiniciar Nginx.
```
sudo systemctl restart nginx
```

Limpar cache.
```
php artisan config:clear
```


## Sequência para criar o projeto

Instalar o Laravel no computador.
```
composer global require laravel/installer
```

Criar o projeto com Laravel. A palavra "celke" no final indica o nome do diretório que será criado, e dentro dele o projeto será instalado.
```
laravel new celke
```

- Which starter kit would you like to install? / Qual kit inicial você gostaria de instalar? Digite vue e pressione Enter.
- Which authentication provider do you prefer? / Qual provedor de autenticação você prefere? Digite laravel e pressione Enter.
- Which testing framework do you prefer? / Qual framework de testes você prefere? Digite 0 e pressione Enter.
- Would you like to run npm install and npm run build? (yes/no) [yes]: / Você gostaria de executar npm install e npm run build? (sim/não) [sim]: Pressione Enter.

Acessar o diretório do projeto.
```
cd celke
```

Rodar o projeto local.
```
composer run dev
```

Alterar as credenciais do banco de dados no arquivo .env.
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=celke
DB_USERNAME=root
DB_PASSWORD=
```

Executar as migrations para criar as tabelas e as colunas.
```
php artisan migrate
```

Acessar a página criada com Laravel.
```
http://127.0.0.1:8000
```

Traduzir para português [Módulo pt-BR](https://github.com/lucascudo/laravel-pt-BR-localization)

Criar migration para criar a tabela no banco de dados.
```
php artisan make:migration create_nome_table
```
```
php artisan make:migration create_tasks_table --create=tasks
```

Criar a Models. A models é usada para gerenciar a tabela do banco de dados através do Eloquent ORM.
```
php artisan make:model NomeDaModel
```
```
php artisan make:model Task
```

Criar Seed para cadastrar dados de teste.
```
php artisan make:seeder NomeSeeder
```
```
php artisan make:seeder TaskSeeder
```

Criar a Controller.
```
php artisan make:controller NomeController
```
```
php artisan make:controller Tasks/TaskController
```

## Autor

Este projeto foi desenvolvido por [Cesar Szpak](https://github.com/cesarszpak) e está hospedado no repositório da organização [Celke](https://github.com/celkecursos).

## Licença

Este projeto está licenciado sob a licença MIT - veja o arquivo [LICENSE](LICENSE.txt) para mais detalhes.
