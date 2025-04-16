<form action="salvar_colaborador.php" method="post">
    <label>Nome: <input type="text" name="nome" required></label><br>
    <label>Cargo: <input type="text" name="cargo"></label><br>
    <label>Departamento: <input type="text" name="departamento"></label><br>
    <label>Email: <input type="email" name="email"></label><br>
    <label>CPF: <input type="text" name="cpf"></label><br>
    <label>Centro de Custo: <input type="text" name="centro_custo"></label><br>
    <label>Status:
        <select name="status">
            <option value="Online">Online</option>
            <option value="Offline">Offline</option>
        </select>
    </label><br>
    <h4>Notebook</h4>
    <label>Patrimônio: <input type="text" name="notebook_patrimonio"></label><br>
    <label>Série: <input type="text" name="notebook_serie"></label><br>
    <label>Modelo: <input type="text" name="notebook_modelo"></label><br>
    <h4>Fone</h4>
    <label>Patrimônio: <input type="text" name="fone_patrimonio"></label><br>
    <label>Série: <input type="text" name="fone_serie"></label><br>
    <label>Modelo: <input type="text" name="fone_modelo"></label><br>
    <label>Link do Termo de Responsabilidade: <input type="url" name="termo_responsabilidade"></label><br>
    <input type="submit" value="Salvar">
</form>
