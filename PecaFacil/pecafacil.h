#include <iostream>
#include <fstream>
#include <string>
#include <vector>

class Peca
{

public:
	std::string nome;
	std::string marca;

	Peca(std::string, std::string);
};

class Buscador
{
private:
	std::vector<Peca*>pecas;

public:
	Buscador(std::string);
	
	std::vector<Peca*> busca(std::string);

	friend std::ostream& operator << (std::ostream&, Peca*);
};