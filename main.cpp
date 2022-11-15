//#include<iostream>
#include"pqtype.cpp"
#include<iostream>
using namespace std;
int main()
{
    //ItemType ;
    PQType<int>b(30);
    b.Enqueue(9);
    b.Enqueue(2);
    b.Enqueue(7);
    b.Enqueue(3);
    b.Enqueue(11);
    b.Enqueue(17);
    b.Enqueue(0);
    b.Enqueue(5);
    b.Enqueue(1);

    if(b.IsEmpty()!=false)
        cout<<"Queue is Empty"<<endl;
    else
        cout<<"Queue is not Empty"<<endl;

        b.PrintQueue();

   // b.Dequeue(b);

    return 0;

}
