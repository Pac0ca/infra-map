<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <title>Nova Reclamação</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f3f4f6;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            margin: 0;
        }
        .form-container {
            background-color: white;
            padding: 30px;
            border-radius: 16px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            width: 100%;
            max-width: 500px;
        }
        .form-container h2 {
            margin-bottom: 20px;
            font-size: 24px;
            color: #1f2937;
            text-align: center;
        }
        label {
            font-weight: bold;
            color: #374151;
            display: block;
            margin-bottom: 5px;
        }
        select, textarea, input[type="file"], button {
            width: 100%;
            margin-bottom: 20px;
            padding: 10px;
            border: 1px solid #d1d5db;
            border-radius: 8px;
            box-sizing: border-box;
        }
        textarea {
            resize: none;
            height: 100px;
        }
        button {
            background-color: #2563eb;
            color: white;
            font-weight: bold;
            border: none;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        button:hover {
            background-color: #1e40af;
        }
    </style>
</head>
<body>
    <div class="form-container">
        <h2>Nova Reclamação</h2>
        <form action="{{ route('reclamacoes.store') }}" method="POST" enctype="multipart/form-data">
            @csrf

            <label for="tipo_problema">Tipo do Problema</label>
            <select name="tipo_problema" id="tipo_problema" required>
                <option value="">Selecione...</option>
                <option value="Buraco na estrada">Buraco na estrada</option>
                <option value="Falta de iluminação">Falta de iluminação</option>
                <option value="Esgoto a céu aberto">Esgoto a céu aberto</option>
                <option value="Vazamento de água">Vazamento de água</option>
                <option value="Acúmulo de lixo">Acúmulo de lixo</option>
                <option value="Calçada danificada">Calçada danificada</option>
                <option value="Semáforo com defeito">Semáforo com defeito</option>
                <option value="Árvore caída">Árvore caída</option>
                <option value="Obstrução de via pública">Obstrução de via pública</option>
                <option value="Animais soltos na rua">Animais soltos na rua</option>
                <option value="Fiação exposta">Fiação exposta</option>
                <option value="Transporte público irregular">Transporte público irregular</option>
                <option value="Outros">Outros</option>
</select>

            <label for="descricao">Descrição Detalhada</label>
            <textarea name="descricao" id="descricao" placeholder="Descreva o problema com detalhes..." required></textarea>

            <label for="foto">Foto do Problema (opcional)</label>
            <input type="file" name="foto" id="foto" accept="image/*">

            <button type="submit">Enviar Reclamação</button>
    </form>
    <!-- Botão para voltar ao Welcome -->
        <a href="{{ url('/') }}" class="mt-4 ml-4 inline-block bg-gray-500 text-white px-4 py-2 rounded hover:bg-gray-600">
        Voltar para o Início
        </a>
    </div>
    
        
</body>
</html>
