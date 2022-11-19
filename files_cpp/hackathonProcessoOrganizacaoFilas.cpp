#include <stdio.h>
#include <locale.h>
#include <conio.h>
#include <stdlib.h>

void necess();
void exame();
void urgencia();
void nome();
void continuar();
void filaFinal();

int priTotal = 0, controle[8];
char codigoExame, matriz[3][8][50], nomeCad[50];

int main()
{
    /* três categorias para calcular a prioridade final:
    - prioridade base: depende do exame desejado, varia entre 0 a 5
    - nível de urgência: adiciona-se 1
    - portador de necessidades especiais: adiciona-se 1
    o valor inicial de todos é 0 */

    //zera-se os espaços do vetor controle,
    //usado para saber quantas pessoas há numa fila num determinado momento
    for(int i = 0; i < 8; i++)
    {
        controle[i] = 0;
    }

    //inicia-se o cadastro
    nome();

    return(0);
}

void necess()
{
    system("cls");
    printf("\nO paciente e idoso, gestante ou portador de qualquer tipo de necessidades especiais?\n\n");
    printf("[N] Nao\n[S] Sim\n\n");
    gets(&codigoExame);

    //pergunta-se das necessidades especiais de um paciente
    //caso ele possua, aumenta-se sua prioridade em 1
    //caso contrário, mantém-se o valor atual
    switch (codigoExame)
    {
        case 'n':
        case 'N':
        exame();
        break;

        case 's':
        case 'S':
        priTotal++;
        exame();
        break;

        default:
        printf("Resposta invalida!\n");
        getch();
        system("cls");
        necess();

    }
}

void exame()
{
    system("cls");
    printf("\nInsira o valor correspondente ao exame desejado:\n\n");
    printf("[1] Procedimento de imagem\n[2] Coleta de material\n[3] Vacinacao\n[4] Entrega de material\n\n[9] Nenhuma das opcoes acima\n\n");
    gets(&codigoExame);

    //a depender de qual exame será realizado, admite-se um valor de prioridade
    //de maior influência, ou prioridade-base
    switch (codigoExame)
    {
        case '1':
        priTotal += 5;
        urgencia();
        break;

        case '2':
        priTotal += 4;
        urgencia();
        break;

        //no caso da vacinação, divide-se em grave e não grave
        case '3':
        system("cls");
        printf("\nA vacinacao e para uma doenca endemica ou grave?\n\n");
        printf("[S] Sim\n[N] Nao\n\n");
        gets(&codigoExame);
        switch (codigoExame)
        {
            case 's':
            case 'S':
            priTotal += 3;
            urgencia();
            break;

            case 'n':
            case 'N':
            priTotal++;
            urgencia();
            break;

            default:
            printf("Resposta invalida!\n");
            getch();
            system("cls");
            exame();

        }
        break;

        case '4':
        priTotal += 2;
        urgencia();
        break;

        case '9':
        urgencia();
        break;

        default:
        printf("Resposta invalida!\n");
        getch();
        system("cls");
        exame();

    }

}

void urgencia()
{
    system("cls");
    printf("\nO exame e de urgencia?\n\n");
    printf("[N] Nao\n[S] Sim\n\n");
    gets(&codigoExame);

    //por fim, pergunta-se a respeito da urgencia de atendimento
    //caso haja, aumenta-se a prioridade em 1
    //caso contrário, mantém-se o valor atual
    switch (codigoExame)
    {
        case 'n':
        case 'N':
        continuar();
        break;

        case 's':
        case 'S':
        priTotal++;
        continuar();
        break;

        default:
        printf("Resposta invalida!\n");
        getch();
        system("cls");
        urgencia();

    }
}

void nome()
{
    system("cls");

    //zera-se as variáveis de prioridade e de nome
    priTotal = 0;
    nomeCad[0] = '\0';

    printf("\nDigite o nome para cadastro:\n");
    gets(nomeCad);
    necess();
}

void continuar()
{
    char escolha;
    int k;

    system("cls");

    //salva-se o nome armazenado em uma matriz tridimensional
    //em sua respectiva fila de prioridade
    //e na sua posição de chegada na fila
    for(k = 0; k < 50; k++)
    {
        if(nomeCad[k] != '\0')
        {
            matriz[controle[priTotal]][priTotal][k] = nomeCad[k];
        }
        else
        {
            break;
        }
    }
    
    controle[priTotal]++;

    //caso se deseje continuar o cadastramento de nomes, há a possibilidade
    //caso não, serão impressos as posições finais
    printf("Cadastro completo!\n");
    printf("Deseja continuar cadastrando nomes?\n");
    printf("[S] Sim\n[N] Nao\n\n");
    gets(&escolha);
    
    switch(escolha)
    {
        case 's':
        case 'S':
        nome();
        break;

        case 'n':
        case 'N':
        filaFinal();
        break;

        default:
        printf("Resposta invalida!\n");
        getch();
        system("cls");
        continuar();
    }
}

void filaFinal()
{
    //imprime-se todos as posições de todos indivíduos cadastrados organizadamente
    //suportando, nesse caso, até 3 pessoas em cada uma das 8 filas de prioridade
    for(int j = 0; j < 8; j++)
    {
        printf("\n");

        for(int i = 0; i < 3; i++)
        {
            printf("Fila de prioridade %d, Posicao %d = %s\n", j, (i+1), matriz[i][j]);
        }
    }

}