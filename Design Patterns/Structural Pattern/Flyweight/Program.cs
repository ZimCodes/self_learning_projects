using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Flyweight
{
    class Program
    {
        static void Main(string[] args)
        {
            string[] colors = { "Orange", "Red", "Yellow", "Purple", "Blue" };
            for (int i = 0; i < 20;i++)
            {
                Insect insect = insectFactory.getInsect(insectFactory.getRandColor());
                Console.WriteLine(insect.ToString());
            }
            Console.ReadKey();
        }
    }
}
