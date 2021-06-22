using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Flyweight
{
    class insectFactory
    {
        static Insect myinsect;
        static Random rand = new Random();
        static private Dictionary<string, Insect> insects = new Dictionary<string, Insect>();
        public static Insect getInsect(string color)
        {
            //Tells whether or not a color of the butterfly has been created. If so, use the same butterfly which was already created.
            myinsect = (insects.ContainsKey(color)) ? insects[color] : null;
            if (myinsect == null)
            {
                myinsect = new Butterfly(color);
                insects.Add(color, myinsect);
            }
            return myinsect;
        }
        public static string getRandColor()
        {
            string[] colors = { "Orange", "Red", "Yellow", "Purple", "Blue"};
            return colors[rand.Next(colors.Length)];
        }
    }
}
