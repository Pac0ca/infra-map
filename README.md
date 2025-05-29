---

# Mapa Mental Resumido do Projeto Laravel + Leaflet

---

### 1. **Criar projeto Laravel**

* Criar projeto novo via Composer
* Configurar banco MySQL no `.env`

---

### 2. **Instalar Laravel Breeze**

* Instalar autenticação simples (login, registro, logout)
* Escolher stack Blade (HTML + Alpine.js)
* Rodar as migrations para criar tabelas de usuários

---

### 3. **Configurar Rotas**

* Criar rota `/mapa` protegida por login (middleware `auth`)
* Manter rotas de login, registro, dashboard

---

### 4. **Criar View do Mapa**

* Criar arquivo `mapa.blade.php`
* Incluir biblioteca Leaflet e mapa base OpenStreetMap
* Mapear clique do usuário para marcar pontos no mapa

---

### 5. **Modificar Dashboard**

* Editar dashboard para incluir link/botão que leva à página do mapa
* Facilitar navegação para o usuário

---

### 6. **Testar funcionalidade**

* Criar usuário, logar, acessar dashboard
* Acessar página do mapa
* Clicar no mapa para marcar pontos

---

### Próximos passos (fora do resumo)

* Salvar marcações no banco
* Criar controller e model para isso
* Criar página de administração para ver marcações
* Controlar permissões de acesso

---

**Resumo final:**
Você criou um projeto Laravel com login, uma rota e página com mapa interativo, e um link no dashboard para acessar esse mapa. O Leaflet mostra o mapa, o usuário pode clicar para marcar pontos. O sistema está protegido para que só usuários logados vejam o mapa.

---