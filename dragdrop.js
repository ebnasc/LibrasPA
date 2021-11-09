function main(entradas) {
	const linhas = entradas.trim().split("\n");

	for (let i = 0; i < linhas.length; i++) {
		let linha_entrada;
		try {
			linha_entrada = eval(linhas[i]);
		} catch {
			linha_entrada = linhas[i];
		}
		if (!linha_entrada || linha_entrada !== "") {
			const resultado_processado = processarLinha(linha_entrada);
			if (resultado_processado) {
				console.log(resultado_processado);
			}
		}
	}
}

process.stdin.resume();
process.stdin.setEncoding("utf-8");
var stdin_input = "";
process.stdin.on("data", function (input) {
	stdin_input += input;
});
process.stdin.on("end", function () {
	main(stdin_input);
}); function processarLinha(linha) {
	return linha;
}
