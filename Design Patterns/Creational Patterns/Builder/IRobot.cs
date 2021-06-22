using System;
using System.Collections.Generic;
using System.Linq;
using System.Text;
using System.Threading.Tasks;

namespace Builder
{
    interface IRobot
    {
        string setRobotHead { get; set;}
        string setRobotTorso { get; set;}
        string setRobotArms { get; set; }
        string setRobotLegs { get; set; }
    }
}
