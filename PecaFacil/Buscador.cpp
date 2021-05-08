#include <fstream>

#include "pecafacil.h"

Buscador::Buscador(std::string banco)
{
	std::ifstream ip(banco);
	if (ip.is_open())
	{
		std::string nome, marca;

		while (ip.good())
		{
			getline(ip, nome, ',');
			getline(ip, marca, ',');
		
			this->pecas.insert(pecas.end(), new Peca(nome, marca));
		}
	}
	else
	{
		// Call fail to access data base dev function
	}
}

std::vector<Peca*> Buscador::busca(std::string entrada)
{
	std::vector<Peca*> resultados;

	for (Peca* peca : this->pecas)
	{
		if (peca->nome == entrada)
		{
			resultados.insert(pecas.end(), peca);
		}
	}

	if (resultados.end() == resultados.begin())
	{
		// Print nehuma peça encontrada
	}

	return resultados;
}