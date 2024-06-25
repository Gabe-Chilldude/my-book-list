# Vivlio

# Instalação

Pode ser que após baixar e instalar o projeto (usando: 'composer install') na sua máquina o seguinte erro apareça:

No application encryption key has been specified.

para resolver insira as seguintes linha em seu .env

APP_KEY="base64:J63qRTDLub5NuZvP+kb8YIorGS6qFYHKVo6u7179stY="
APP_PREVIOUS_KEYS="base64:2nLsGFGzyoae2ax3EF2Lyq/hH6QghBGLIq5uL+Gp8/w="
