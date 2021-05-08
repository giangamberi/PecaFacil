#include <iostream>
#include <vector>

#include "pecafacil.h"

using namespace std;

int main(int argc, char* argv[])
{
	bool isRunning = true;

	Buscador* buscador = new Buscador("Dados.csv");
	int option = -1;

	while (isRunning)
	{
		cout << "| DEV MENUE OPTION |" << endl;
		cout << "| 0- Exit" << endl;
		cout << "| 1- Busca" << endl;
	
		cout << "Option:"; cin >> option;

		switch (option)
		{
		case 0:
			isRunning = false;
			break;

		case 1:
			string input;
			vector<Peca*> result;

			cout << "Busca:"; cin >> input;
			result = buscador->busca(input);

			cout << "RESULTADO DA BUSCA" << endl;
			
			if (result.begin() == result.end())
			{
				for (Peca* res : result)
				{
					cout << "NOME: " << res->nome << endl;
					cout << "MARCA: " << res->marca << endl;
				}
			}
			break;
		}
	}

	return 0;
}