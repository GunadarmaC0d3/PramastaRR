#include <iostream>
using namespace std;

int main ()
{
    int a,b,c,i;
    
    cout<<"Program Pembuat Segitiga V2.0\n";
    cout<<"=============================\n";
    cout<<"Masukkan sebuah bilangan bulat:";
    cin>>a; cout<<endl;
    
    for (i=1;i<=a;i++)
    {
        for (b=1;b<=a-i;b++)
        {
            cout<<" ";    
        }
        for (c=1;c<=i;c++)
        {
            cout<<"*";    
        }
        cout<<"\n";
    }    
}
