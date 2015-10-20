@echo Começando o script.


cd C:\Users\aluno\Desktop\CloneSkyBooks

@echo Entrou-se na pasta.

rmdir SkyBooks /S /Q

@echo Deletou-se o arquivo antigo.

git clone https://github.com/Teawith/SkyBooks.git

@echo Clonou-se o atualizado.

pause