##Primeira parte
<p align="center">Devemos baixar o php na versao mais atual;
Em seguida colar no disco local da seguinte forma: nome diretorio php-7.4.6 fincado assim, C:\php-7.4.6
<a href="https://drive.google.com/file/d/1rpytvxczNfD9aooy3wnK32i4HgdvfOQP/view?usp=sharing">Link do php 7.4.6 para Windows/</a>
dentro do diretorio php-7.4.6 extrair o php que vc baixou</p>


## Segunda parte
Depois disso vai em variaveis de ambiente, path e cole o caminho do disco local da pasta php-7.4.6
C:\php-7.4.6
<p>Testa se deu tudo certo, entre no cmd e digite: php --version, se aparece a versao deu tudo certo</p>


## Terceira parte
Entra na pasta do php-7.4.6 encontre o php.ini-development e faça uma copiar deste arquivo,
renomeia essa copia para php.ini

## Quarta parte
Devemos baixar e instalar o composer.
<a href="https://getcomposer.org/Composer-Setup.exe">Link do composer para Windows/</a>


## Quinta parte
Em seguida devemos iniciar o laravel

codigo para iniciar o pojeto: composer create-project --prefer-dist laravel/laravel nomeDoSeuApp "7.0.0"//vesao


Para iniciar o servidor usar o codigo, php artisan serve --port=8080

<b> Se deu tudo certo tente entra no localhost:8080, se aparece algo deu tudo certo. </b>
