#include <iostream>
using namespace std;


class mesabase{
public:
    mesabase(int=0, float=0);
    virtual ~mesa();
    virtual void setPedido(int *)=0;  ///Setar a quantidade dos pedidos
    virtual int * getPedido()=0
    virtual void setValor(int *, float)=0;   ///Setar o valor total do pedido
    virtual float getValor()=0
private:
    int pedido[25];  ///Quantidade de cada pedido pendente
    float valortotal;  ///Valor total da mesa
};


class mesa:public mesabase{
public:
    mesa();
    void setPedido(int*);
    int * getPeiddo();
    void setValor(float);
    float getValor();
};

