using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace ConsoleApp22
{
    class Program
    {
        public static int z = 30;
        public static string[] nombres = new string[z];
        public static int top=7;       
        public static string aux2;
        public static string v1;
       
        static void Main(string[] args)
        {

            nombres[0] = "1carlos";
            nombres[1] = "2carlos";
            nombres[2] = "3carlos";
            nombres[3] = "4carlos";
            nombres[4] = "5carlos";
            nombres[5] = "6carlos";
            nombres[6] = "7carlos";
         

         



            Console.WriteLine("\t ----------| Nombre  amigos |----------\n");
            Desplegar();
            Console.WriteLine("\nPresiona una tecla para continuar.\n");

            Console.ReadKey();


            do
            {

                Console.Write("¿Deseas eliminar los elementos?," +
               " Presiona [1] para si o presiona [2] para no?: ");
                aux2 = Console.ReadLine();

                if (aux2.Equals("1"))
                {

                    Eliminar();
                }

            } while (aux2.Equals("1"));


            Console.WriteLine("\nPresiona una tecla para continuar.\n");

            Console.ReadKey();

            Console.Clear();

      

            Console.WriteLine("\t ----------| Despliegue de Datos |----------\n");
            Desplegar();

            Console.WriteLine("\nPresiona una tecla para continuar.\n");

            Console.ReadKey();
        }


     

        public static void Eliminar()
        {
            
            if (top == 0)
            {
                Console.WriteLine("La Pila esta Vacía.\n");
            }

            else
            {
                v1 = nombres[top-1];
              
                Console.WriteLine("Dato eliminado: Nombre: {0} en posicion [{1}]\n", v1,top);
                nombres[top - 1] = null;
                top--;
           
            }
        }

        public static void Desplegar()
        {
       
            for (int i = top-1 ; i >= 0; i--)
            {
                Console.WriteLine("Nombre {0}: {1} ", i + 1, nombres[i]);
               
            }
        }
    }
}
