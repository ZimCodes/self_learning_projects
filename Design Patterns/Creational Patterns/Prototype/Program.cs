using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Prototype
{
    class Program
    {
        static void Main(string[] args)
        {
            Graphic graphic = new MusicalNote();
            Graphic otherGraphic = graphic.Clone();
            graphic.Draw();
            otherGraphic.Draw();
            Console.ReadLine();
        }
    }
}
