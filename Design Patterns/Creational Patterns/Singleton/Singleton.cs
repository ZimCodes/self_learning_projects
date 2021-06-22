using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Singleton
{
    public sealed class Singleton
    {
        private static int Age = 50;
        private static string  Name = "Georgey";
        private Singleton()
        {

        }
        private static Singleton instance;
        public static Singleton Instance
        {
            get {
                if (instance == null)
                {
                    instance = new Singleton();
                }
                return instance;
            }
        }
        public override string ToString()
        {
            return String.Format("Age: {0}, Name: {1}",Age,Name);
        }
        public void Yolo()
        {
            //TODO: Add some code here
        }
    }
}
