using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Command
{
    class Light
    {
        public void TurnLightOn()
        {
            Console.WriteLine("Light is On!");
        }
        public void TurnLightOff()
        {
            Console.WriteLine("Light is Off!");
        }
        public void ChangeLightColorToBlue()
        {
            Console.WriteLine("The light is now Blue!");
        }
    }
}
